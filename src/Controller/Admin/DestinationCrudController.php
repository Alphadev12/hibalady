<?php

namespace App\Controller\Admin;

use App\Entity\Destination;
use App\Form\DestinationImageType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichFileType;

class DestinationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Destination::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextEditorField::new('description'),
            TextField::new('adresse'),
            ImageField::new('imageName', 'Image')
            ->onlyOnIndex()
            ->setBasePath('/images/destinations'),
            TextField::new('imageFile')->setFormType(VichFileType::class, [
                'delete_label' => 'Supprimer?'
            ])->onlyOnForms(),
            CollectionField::new('images')->setEntryType(DestinationImageType::class)->onlyOnForms()
        ];
    }
   
}
