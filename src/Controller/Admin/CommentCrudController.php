<?php

namespace App\Controller\Admin;

use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CommentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comment::class;
    }

    // public function configureCrud(Crud $crud): Crud
    // {
    //     return $crud
    //          ->set
    //          ->setEntityLabelInSingular('Conference Comment')
    //          ->setEntityLabelInPlural('Conference Comments')
    //          ->setSearchFields(['author', 'text', 'email'])
    //          ->setDefaultSort(['createdAt' => 'DESC'])
    //          ;
    // }

    // public function configureFilters(Filters $filters): Filters
    // {        
    //        return $filters
    //        ->add(EntityFilter::new('conference'))
    //        ;
    // }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('content'),
            IntegerField::new('rating'),
            DateTimeField::new('createdAt'),
        ];
    }
}
