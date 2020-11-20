<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ActiviteRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ActiviteCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ActiviteCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Activite::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/activite');
        CRUD::setEntityNameStrings('activite', 'activites');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
        CRUD::addColumn([
            'label'     => "Nom du projet",
            'type'      => 'select',
            'name'      => 'projet_activte', // the db column for the foreign key

            // optional
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'projet',

            // optional - manually specify the related model and attribute
            'model'     => "App\Models\Projet", // related model
            'attribute' => 'projet_libelle', // foreign key attribute that is shown to user

            // optional - force the related options to be a custom query, instead of all();
            'options'   => (function ($query) {
                return $query->orderBy('projet_libelle', 'ASC')->get();
            }),
        ]);

        CRUD::addColumn(['name' => 'date_activite',
                        'type' => 'text',
                        'label'=>'Date de l\'activité'
        ]);


        CRUD::addColumn(['name' => 'activite_actualite',
                        'type' => 'text',
                        'label'=>'Information sur l\'activité'
        ]);

    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ActiviteRequest::class);

        //CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */

        CRUD::addField(['name' => 'date_activite',
            'type' => 'text',
            'label'=>'Date de l\'activité',
            'type'  => 'date_picker',

            // optional:
            'date_picker_options' => [
                'todayBtn' => 'linked',
                'format'   => 'dd-mm-yyyy',
                'language' => 'fr'
            ],
        ]);

        CRUD::addField([
            'label'     => "Nom du projet",
            'type'      => 'select2',
            'name'      => 'projet_activte', // the db column for the foreign key

            // optional
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'projet',

            // optional - manually specify the related model and attribute
            'model'     => "App\Models\Projet", // related model
            'attribute' => 'projet_libelle', // foreign key attribute that is shown to user

            // optional - force the related options to be a custom query, instead of all();
            'options'   => (function ($query) {
                return $query->orderBy('projet_libelle', 'ASC')->get();
            }),
        ]);

        CRUD::addField(['name' => 'activite_actualite',
                'type' => 'textarea',
                'label'=>'Information sur l\'activité'
        ]);
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
