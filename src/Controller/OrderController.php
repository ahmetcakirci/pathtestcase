<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Model\Order;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\SerializerInterface;

class OrderController extends AbstractController
{
    /**
     * @Route("/api/order", name="order_create", methods={"POST"})
     *
     */
    public function create(Request $request): Response
    {
        $input=[
                'order_code'=>$request->request->get('order_code'),
                'product_id'=>$request->request->get('product_id'),
                'quantity'=>$request->request->get('quantity'),
                'address'=>$request->request->get('address'),
            ];

        $constraint = new Assert\Collection([
                'order_code' =>new Assert\Required([
                    new Assert\NotBlank([],'Order kod boş bırakmayınız!'),
                ]),
                'product_id' => new Assert\Required([
                    new Assert\NotBlank([],'Product id boş bırakmayınız!'),
                ]),
                'quantity' => new Assert\Required([
                    new Assert\NotBlank([],'Miktarı boş bırakmayınız!'),
                ]),
                'address' => new Assert\Required([
                    new Assert\NotBlank([],'Adresi boş bırakmayınız!'),
                ])
        ]);

        $validator = Validation::createValidator();
        $violations = $validator->validate($input,$constraint);

        if ($violations->count()) {
            for ($i=0;$i<$violations->count();$i++){
                $messages[]=$violations->get($i)->getMessage();
            }

            return $this->json([
                'message' => $messages,
            ],400);
        }

        $order=new Orders();
        $order->setOrderCode($input['order_code']);
        $order->setProductId($input['product_id']);
        $order->setQuantity($input['quantity']);
        $order->setAddress($input['address']);
        $order->setCreatedAt(new \DateTime());

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($order);

        $entityManager->flush();

        return $this->json([
            'message' => 'Insert product success',
        ]);
    }

    /**
     * @Route("/api/order/{id}", requirements={"id"="\d+"}, name="order_edit", methods={"PUT"})
     */
    public function edit($id,Request $request): Response
    {
        $input=[
            'quantity'=>$request->request->get('quantity'),
            'address'=>$request->request->get('address'),
        ];

        $constraint = new Assert\Collection([
            'quantity' => new Assert\Required([
                new Assert\NotBlank([],'Miktarı boş bırakmayınız!'),
            ]),
            'address' => new Assert\Required([
                new Assert\NotBlank([],'Adresi boş bırakmayınız!'),
            ])
        ]);

        $validator = Validation::createValidator();
        $violations = $validator->validate($input,$constraint);

        if ($violations->count()) {
            for ($i=0;$i<$violations->count();$i++){
                $messages[]=$violations->get($i)->getMessage();
            }

            return $this->json([
                'message' => $messages,
            ],400);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $order = $entityManager->getRepository(Orders::class)->findOneBy(['id'=>$id]);

        if (!$order) {
            return $this->json([
                'message' => 'No order found for id '.$id,
            ],404);
        }

        if (!is_null($order->getShippingDate())){
            return $this->json([
                'message' => 'Cannot be updated because it is an order for id '.$id,
            ],200);
        }

        $order->setQuantity($input['quantity']);
        $order->setAddress($input['address']);
        $entityManager->flush();

        return $this->json([
            'message' => 'Order edit success for id '.$id,
        ]);
    }

    /**
     * @Route("/api/order/{id}", requirements={"id"="\d+"}, name="order_delete", methods={"DELETE"})
     *
     */
    public function delete($id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $order = $entityManager->getRepository(Orders::class)->findOneBy(['id'=>$id]);

        if (!$order) {
            return $this->json([
                'message' => 'No order found for id '.$id,
            ],404);
        }

        if (!is_null($order->getDeletedAt())){
            return $this->json([
                'message' => 'Previously deleted for id '.$id,
            ],200);
        }

        $order->setDeletedAt(new \DateTime());
        $entityManager->flush();

        return $this->json([
            'message' => 'Order delete success for id '.$id,
        ]);
    }

    /**
     * @Route("/api/order/{id}", requirements={"id"="\d+"}, name="order_list", methods={"GET"})
     */
    public function list($id,SerializerInterface $serializer): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $order = $entityManager->getRepository(Orders::class)->findOneBy(['id'=>$id]);

        if (!$order) {
            return $this->json([
                'message' => 'No order found for id '.$id,
            ],404);
        }

        $orderList=new Order();
        $orderList->setId($order->getId());
        $orderList->setOrderCode($order->getOrderCode());
        $orderList->setProductId($order->getProductId());
        $orderList->setAddress($order->getAddress());
        $orderList->setShippingDate($order->getShippingDate());
        $orderList->setDeletedAt($order->getDeletedAt());
        $orderList->setCreatedAt($order->getCreatedAt());

        return $this->json($orderList);
    }

    /**
     * @Route("/api/order/list", name="order_lists", methods={"GET"})
     */
    public function lists(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $order = $entityManager->getRepository(Orders::class)->findAll();

        return $this->json($order);
    }
}
