<?php
namespace Inventory\ItemMasterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\DateTime;

class ItemsType extends AbstractType
{
    protected $CategoryArr;
    protected $options;

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->options = $options['label_attr'];
        $this->CategoryArr = $this->options['CategoryArr'];


        $builder

            ->add('id', HiddenType::class, array('label'  => '','required'=>false,'attr' => array(), 'label_attr' => array('class' => '')))
            ->add('name', TextType::class, array('label'  => 'name','required'=>false,'attr' => array(), 'label_attr' => array('class' => '')))
            ->add('SKU', TextType::class, array('label'  => 'SKU','required'=>false,'attr' => array(), 'label_attr' => array('class' => '')))
            ->add('price', MoneyType::class, array('label'  => 'Price', 'currency' => 'CAD','required'=>false,'attr' => array(), 'label_attr' => array('class' => '')))
            ->add('quantity', NumberType::class, array('label'  => 'Qty','required'=>false,'attr' => array()))
            ->add('categoryID', ChoiceType::class, array('choices' => $this->CategoryArr, 'disabled' => false,'label'  => 'Category','required'=>false,'attr' => array('class' => ''), 'label_attr' => array('class' => '')))
            ->add('dateCreated', DateTimeType::class, array('html5' => false,'widget' => 'single_text', 'disabled' => false,'label'  => 'Date Created','required'=>false,'attr' => array('readonly' => true,'class' => ' '), 'label_attr' => array('class' => '')))
            ->add('dateModified', DateTimeType::class, array('html5' => false,'widget' => 'single_text', 'disabled' => false,'label'  => 'Date Updated','required'=>false,'attr' => array('readonly' => true,'class' => ' '), 'label_attr' => array('class' => '')))
            ;


    }

    public function getBlockPrefix()
    {
        return 'Items';
    }
}
