<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AttendanceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AttendanceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AttendanceCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Attendance::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/attendance');
        CRUD::setEntityNameStrings('attendance', 'attendances');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('absence_date');
        // CRUD::column('congregation_id');
        CRUD::addColumn([
            "name" => "congregation_id",
            "key" => "congregation_id",
            "label" => "Congregation",
            "entity" => "Congregation", //relation in model
            "model" => "App\Models\Congregation",
            "type" => "select",
            "attribute" => "fullname"
        ]);
        $this->crud->removeButtons(['update','delete','show'], 'line');
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
        CRUD::setValidation(AttendanceRequest::class);

        // CRUD::field('absence_date');
        $this->crud->addField([
            'name'  => 'absence_date',
            'type'  => 'hidden',
            'value' => date('Y-m-d'),
        ]);
        $this->crud->addField([
            'type' => 'select',
            'name' => 'congregation_id', // the relationship name in your Migration
            'entity' => 'Congregation', // the relationship name in your Model
            'attribute' => 'fullname', // attribute that is shown to admin
            'allows_null' => true,
            'default' => NULL,
            'options'   => (function ($query) {
                return $query->orderBy('fullname','asc')->get();
            }),
        ]);
        // CRUD::field('congregation_id');

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
    }
}
