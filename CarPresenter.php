<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette,
    Nette\Application\UI\Form;
 

final class CarPresenter extends Nette\Application\UI\Presenter    
{
    private $cars;
    
    public function actionList() {
        $this->template->cars = $this->cars;
    }
    
    public function actionForm($name) {
        if (!isset($this->cars[$name])) {
            $this->flashMessage("Chybný parametr name!", "text-danger p-4");
            $this->flashMessage("Chybný parametr name!");
            $this->flashMessage("Chybný parametr name!");            
            $this->redirect("Car:list");
        }
        $this->template->cars = [$this->cars[$name]];
        $this->template->name = $name;
    }
    
    public function actionOrder($id) {

    }   
    
    public function createComponentOrderForm(): Form {  
        $form = new Form();
        $form->addText('name', 'Jméno a Příjmení')
             ->setRequired("Vyplňte Jméno a Příjmení")
             ->setHtmlAttribute('placeholder', 'Adam Nový');
        $form->addEmail('email', 'Email')
             ->setRequired("Vyplňte Email")
             ->setHtmlAttribute('placeholder', 'adam.novy@seznam.cz');
        $form->addText('address', 'Address')
             ->setRequired("Vyplňte Address")
             ->setHtmlAttribute('placeholder', 'Nová Ulice 123');
        $form->addText('city', 'City')
             ->setRequired("Vyplňte City")
             ->setHtmlAttribute('placeholder', 'Plzeň');
        $countries = [
            'CZ' => 'Česká Republika',
            'DE' => 'Německo',
         ];
        $form->addSelect('state', 'State', $countries)
                ->setPrompt('Choose...');
        $form->addInteger('zip', 'Zip')
             ->setRequired("Vyplňte Zip")
             ->setHtmlAttribute('placeholder', '12345')
             ->addRule(Form::FLOAT, "Pouze čísla")     
             ->addRule(Form::MIN, "Nelze zadat záporná čísla", 0);
        
        $form->addSubmit('send', 'OBJEDNAT')
             ->setAttribute('class', 'color');
        
        $form->onSuccess[] = [$this, "orderFormSuccess"];
        
        return $form;
     }
     
     public function orderFormSuccess(Form $form, $data): void {
        dump($data, $form); 
        exit;
         
         //$form->addError("chybaaa");//
         
        return;
         
         
        $this->flashMessage("Objednávka byla úspěně přijata");            
        $this->redirect("Car:list");        
     }
     
     protected function createComponentComment(): Form
    {
        $form = new Form;
        $form->addEmail('email', 'Vaše emailová adresa')
            ->setRequired("Vyplňte email");
        $form->addText('y', 'Zadejte aktuální rok')->setOmitted()
            ->addRule(Form::EQUAL, 'Chybně vyplněný antispam.', date("Y"))
            ->setRequired("Vyplňte y");
        $form->addTextArea('message', 'Zpráva')
            ->addRule(Form::MIN_LENGTH, 'Zpráva musí být minimálně 10 znaků dlouhá.', 10)
            ->setRequired("Vyplňte message");
        $form->addText('date_x', 'Birthday')
                ->setType('date')
                ->setRequired("Vyplňte date");
        $form->addSubmit('send', 'Odeslat');
        $form->addImageButton('name', '/images/LOGO.png');
        $form->onSuccess[] = [$this, "orderFormSuccess"];
        
        return $form;
    }
    
    public function orderFormSuccessMessage(Form $form, $data): void {
        dump($data, $form); 
        exit;
        return;
    }
  
    protected function startup(): void {
        $this->cars =  [
            "acuransx" => [
                "id" => "acuransx",
                "name" => "Acura NSX",
                "type" => "Type S Coupe 2022",
                "speed" => "307 km/h",
                "price" => "$: 169.500",
                "IMG" => "auto1",
            ],
            "bmwm8" => [
                "id" => "bmwm8",
                "name" => "BMW M8",
                "type" => "Gran Coupe 2021",
                "speed" => "305 km/h",
                "price" => "$: 130.105",
                "IMG" => "auto2",
            ],  
            "lamborghini" => [
                "id" => "lamborghini",
                "name" => "Lamborghini",
                "type" => "Aventador Ultimae Roadster 2022",
                "speed" => "355 km/h",
                "price" => "$: 546.840",
                "IMG" => "auto3",
            ],
            "mclaren" => [
                "id" => "mclaren",
                "name" => "Mclaren",
                "type" => "600LT Spider 2020",
                "speed" => "328 km/h",
                "price" => "$: 256.500",
                "IMG" => "auto4",
            ],
            "nissangtr" => [
                "id" => "nissangtr",
                "name" => "Nissan GT-R",
                "type" => "Track Edition 2021",
                "speed" => "330 km/h",
                "price" => "$: 145.540",
                "IMG" => "auto5",
            ],
            "skoda" => [
                "id" => "skoda",
                "name" => "Škoda",
                "type" => "Superb L&K",
                "speed" => "220 km/h",
                "price" => "$: 33.630",
                "IMG" => "auto6",
            ],
        ];
        
        parent::startup();              
    }
}
