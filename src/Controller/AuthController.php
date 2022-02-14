<?php
namespace App\Controller;

use App\Entity\User;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;

class AuthController extends AbstractController
{
    /**
     * @Route("/register", name="user_register", methods={"POST"})
     *
     */
    public function register(Request $request, UserPasswordEncoderInterface $encoder):Response
    {
        $input=[
            'username'=>$request->request->get('username'),
            'password'=>$request->request->get('password'),
            'email'=>$request->request->get('email'),
        ];

        $constraint = new Assert\Collection([
            'username' =>new Assert\Required([
                new Assert\NotBlank([],'Usernama boş bırakmayınız!'),
            ]),
            'password' => new Assert\Required([
                new Assert\NotBlank([],'Password boş bırakmayınız!'),
            ]),
            'email' => new Assert\Required([
                new Assert\NotBlank([],'Email boş bırakmayınız!'),
            ]),
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



        $user = new User($input['username']);
        $user->setPassword($input['password']);
        $user->setEmail($input['email']);
        $user->setUsername($input['username']);


        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($user);
        $entityManager->flush();

        return $this->json([
            'message' => 'Insert user success',
        ]);
    }

    /**
     * @Route("/api/login_check", name="user_token", methods={"POST"})
     *
     */
    public function getTokenUser(UserInterface $user, JWTTokenManagerInterface $JWTManager)
    {
        return new JsonResponse(['token' => $JWTManager->create($user)]);
    }

}