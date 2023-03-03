<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\UpdatePasswordType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/parametre')]
class AdminParameterController extends AbstractController
{
   
    
    
    /**
     * Update password
     *
     * @Route("", name="admin_parameter_index")
     * 
     * @param Request $request
     * @param UserPasswordHasherInterface $userPasswordHasher
     * @return Response
     */
    public function edit(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager)
    {
        $user = $this->getUser();

        $form = $this->createForm(UpdatePasswordType::class, $this->getUser());
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $oldPassword = $request->request->get('update_password')['oldPassword'];
            $newPassword = $request->request->get('update_password')['plainPassword']['password'];

            // if ($passwordEncoder->isPasswordValid($this->getUser(), $oldPassword)) {
            //     $newEncodedPassword = $passwordEncoder->encodePassword($user, $newPassword);
            //     $user->setPassword($newEncodedPassword);
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
                
               $entityManager->flush();
    
                $this->addFlash(
                    'success',
                    'Votre mot de passe à bien été changé !'
                );

                $entityManager->refresh($user);    
                return $this->redirectToRoute('admin_account_index');
            // } 
            // else {

            //     $this->addFlash(
            //         'danger',
            //         "L'ancien mot de passe n'est pas le bon !"
            //     );
                
            //     $this->manager->refresh($user);
            //     return $this->redirectToRoute('admin_parameter_index');
            // }
        }

        return $this->render('admin/parameter/update_password.html.twig', [
            'body_class' => "update-password content-center",
            'form' => $form->createView()
        ]);
    }
}