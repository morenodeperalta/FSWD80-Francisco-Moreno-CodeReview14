<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Eventable;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class EventController extends Controller
{
   /**
    * @Route("event/landing", name="event_landing")
    */
   public function landingAction(Request $request)
   {
       $eventsVAR0 = $this->getDoctrine()->getManager()->getRepository('AppBundle:Eventable')->findAll();
       return $this->render('event/landing.html.twig', array('landpage'=>$eventsVAR0));
   }

   /**
    * @Route("/", name="homepage")
    */
   public function indexAction(Request $request)
   {
   		$eventsVAR1 = $this->getDoctrine()->getManager()->getRepository('AppBundle:Eventable')->findAll();
       return $this->render('event/index.html.twig', array('indexevent'=>$eventsVAR1));
   }
      /**
    * @Route("event/create", name="event_create")
    */
   public function createAction(Request $request)
   {
   	// Here we create an object from the class that we made 
       $eventsVAR2 = new Eventable;
/* Here we will build a form using createFormBuilder and inside this function we will put our object and then we write add then we select the input type then an array to add an attribute that we want in our input field */
       $form = $this->createFormBuilder($eventsVAR2)->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('name', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
       ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('img', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('capacity', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('email', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('phone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('address', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('website', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('type', ChoiceType::class, array('choices'=>array('Music'=>'Music', 'Movie'=>'Movie', 'Sport'=>'Sport'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
       
   ->add('save', SubmitType::class, array('label'=> 'Create Eventable', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
       ->getForm();
       $form->handleRequest($request);
/* Here we have an if statement, if we click submit and if  the form is valid we will take the values from the form and we will save them in the new variables */
       if($form->isSubmitted() && $form->isValid()){
           //fetching data
           $name = $form['name']->getData();
           $date = $form['date']->getData();
           $description = $form['description']->getData();
           $img = $form['img']->getData();
           $capacity = $form['capacity']->getData();
           $email = $form['email']->getData();
           $phone = $form['phone']->getData();
           $address = $form['address']->getData();
           $website = $form['website']->getData();
           $type = $form['type']->getData();
        
/* these functions we bring from our entities, every column have a set function and we put the value that we get from the form */
           $eventsVAR2->setName($name);
           $eventsVAR2->setDate($date);
           $eventsVAR2->setDescription($description);
           $eventsVAR2->setImg($img);
           $eventsVAR2->setCapacity($capacity);
           $eventsVAR2->setEmail($email);
           $eventsVAR2->setPhone($phone);
           $eventsVAR2->setAddress($address);
           $eventsVAR2->setWebsite($website);
           $eventsVAR2->setType($type);
           $em = $this->getDoctrine()->getManager();
           $em->persist($eventsVAR2);
           $em->flush();
           $this->addFlash(
                   'notice',
                   'Eventable Added'
                   );
	
       return $this->redirectToRoute('homepage');
}
return $this->render('event/create.html.twig', array('form' => $form->createView()));
   }
           /**
    * @Route("/event/details/{id}", name="event_details")
    */
   public function detailsAction($id)
   {
      $eventsVAR3 = $this->getDoctrine()->getManager()->getRepository('AppBundle:Eventable')->find($id);
       return $this->render('event/details.html.twig', array('detailsevent'=>$eventsVAR3));

   }
  
           /**
    * @Route("/event/edit/{id}", name="event_edit")
    */
   public function editAction( $id, Request $request){

   $eventsVAR4 = $this->getDoctrine()->getRepository('AppBundle:Eventable')->find($id);


           $eventsVAR4->setName($eventsVAR4->getName());
           

       $form = $this->createFormBuilder($eventsVAR4)->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
       ->add('name', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
       ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('img', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('capacity', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('email', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('phone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('address', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('website', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('type', ChoiceType::class, array('choices'=>array('Music'=>'Music', 'Movie'=>'Movie', 'Sport'=>'Sport'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
       ->add('save', SubmitType::class, array('label'=> 'save Eventable', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
       ->getForm();
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()){
           //fetching data
           $name = $form['name']->getData();
           $date = $form['date']->getData();
           $description = $form['description']->getData();
           $img = $form['img']->getData();
           $capacity = $form['capacity']->getData();
           $email = $form['email']->getData();
           $phone = $form['phone']->getData();
           $address = $form['address']->getData();
           $website = $form['website']->getData();
           $type = $form['type']->getData();
           
           $em = $this->getDoctrine()->getManager();
           $eventsVAR4 = $em->getRepository('AppBundle:Eventable')->find($id);
           $eventsVAR4->setName($name);
           $eventsVAR4->setDate($date);
           $eventsVAR4->setDescription($description);
           $eventsVAR4->setImg($img);
           $eventsVAR4->setCapacity($capacity);
           $eventsVAR4->setEmail($email);
           $eventsVAR4->setPhone($phone);
           $eventsVAR4->setAddress($address);
           $eventsVAR4->setWebsite($website);
           $eventsVAR4->setType($type);
           
        
           $em->flush();
           $this->addFlash(
                   'notice',
                   'Eventable Updated'
                   );
           return $this->redirectToRoute('homepage');
       }
       return $this->render('event/edit.html.twig', array('editevent' => $eventsVAR4, 'form' => $form->createView()));
   }

     /**
    * @Route("/event/delete/{id}", name="event_delete")
    */
   public function deleteAction($id){
                $em = $this->getDoctrine()->getManager();
           $eventsVAR5 = $em->getRepository('AppBundle:Eventable')->find($id);
           $em->remove($eventsVAR5);
            $em->flush();
           $this->addFlash(
                   'notice',
                   'Eventable Removed'
                   );
            return $this->redirectToRoute('homepage');
   }

    /**
    * @Route("/event/{type}", name="event_filter")
    */
   public function filterAction($type){
                $em = $this->getDoctrine()->getManager();
           $eventsVAR6 = $em->getRepository('AppBundle:Eventable')->findByType($type);
           
            return $this->render('event/filter.html.twig', array('filterevent' => $eventsVAR6));
   }

}