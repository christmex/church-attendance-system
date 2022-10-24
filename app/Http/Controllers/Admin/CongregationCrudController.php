<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CongregationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CongregationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CongregationCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Congregation::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/congregation');
        CRUD::setEntityNameStrings('congregation', 'congregations');
    }


    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('fullname');
        CRUD::addColumn([
            "name" => "congregation_status_id",
            "key" => "congregation_status_id",
            "label" => "Congregation Status",
            "entity" => "CongregationStatus", //relation in model
            "model" => "App\Models\CongregationStatus",
            "type" => "select",
            "attribute" => "congregation_status"
        ]);
        // CRUD::column('parent_id');
        // CRUD::column('partner_id');
        // CRUD::column('family_status_id');
        // CRUD::addColumn([
        //     "name" => "family_status_id",
        //     "key" => "family_status_id",
        //     "label" => "Family Status",
        //     "entity" => "FamilyStatus", //relation in model
        //     "model" => "App\Models\FamilyStatus",
        //     "type" => "select",
        //     "attribute" => "family_status"
        // ]);
        // CRUD::column('sex');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CongregationRequest::class);

        CRUD::field('fullname');
        // CRUD::field('congregation_status_id');
        $this->crud->addField([
            'type' => 'select',
            'name' => 'congregation_status_id', // the relationship name in your Migration
            'entity' => 'CongregationStatus', // the relationship name in your Model
            'attribute' => 'congregation_status', // attribute that is shown to admin
            'allows_null' => true,
            'default' => NULL,
        ]);
        // CRUD::addField([
        //     'label'     => 'Parent', // Table column heading
        //     'type'      => 'select',
        //     'name'      => 'parent_id', // the column that contains the ID of that connected entity;
        //     // 'entity'    => 'parent_id', // the method that defines the relationship in your Model
        //     // 'attribute' => 'fullname', // foreign key attribute that is shown to user
        //     // 'model'     => "App\Models\Congregation", // foreign key model
        //     'options'   => (function ($query) {
        //         return $query->get();
        //     }),
        // ]);
        // CRUD::addField([
        //     'label'     => 'Partner', // Table column heading
        //     'type'      => 'select',
        //     'name'      => 'partner_id', // the column that contains the ID of that connected entity;
        //     // 'entity'    => 'partner_id', // the method that defines the relationship in your Model
        //     // 'attribute' => 'fullname', // foreign key attribute that is shown to user
        //     // 'model'     => "App\Models\Congregation", // foreign key model
        //     'options'   => (function ($query) {
        //         return $query->get();
        //     }),
        // ]);
        // CRUD::field('family_status_id');
        // $this->crud->addField([
        //     'type' => 'select',
        //     'name' => 'family_status_id', // the relationship name in your Migration
        //     'entity' => 'FamilyStatus', // the relationship name in your Model
        //     'attribute' => 'family_status', // attribute that is shown to admin
        //     'allows_null' => true,
        //     'default' => NULL,
        // ]);
        // CRUD::addField([
        //     'name'  => 'sex', 
        //     'label' => 'Sex', 
        //     'type'  => 'enum',
        //     'options' => [
        //         'Pria' => 'Pria',
        //         'Wanita' => 'Wanita'
        //     ],
        //     'allows_null' => true,
        //     'default' => NULL,
        // ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
        // $this->crud->modifyField($name, $modifs_array);
        // CRUD::modifyField('parent_id',[
        //     'label'     => 'Parent', // Table column heading
        //     'type'      => 'select',
        //     'name'      => 'parent_id', // the column that contains the ID of that connected entity;
        //     'entity'    => 'parent_id', // the method that defines the relationship in your Model
        //     'attribute' => 'fullname', // foreign key attribute that is shown to user
        //     'model'     => "App\Models\Congregation", // foreign key model
        //     'options'   => (function ($query) {
        //         return $query->where('id','!=', $this->data['entry']->id)->get();
        //     }),
        // ]);
        // CRUD::modifyField('partner_id',[
        //     'label'     => 'Partner', // Table column heading
        //     'type'      => 'select',
        //     'name'      => 'partner_id', // the column that contains the ID of that connected entity;
        //     'entity'    => 'partner_id', // the method that defines the relationship in your Model
        //     'attribute' => 'fullname', // foreign key attribute that is shown to user
        //     'model'     => "App\Models\Congregation", // foreign key model
        //     'options'   => (function ($query) {
        //         return $query->where('id','!=', $this->data['entry']->id)->get();
        //     }),
        // ]);
    }
}
