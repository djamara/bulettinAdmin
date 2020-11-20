<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BilanCovidRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BilanCovidCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BilanCovidCrudController extends CrudController
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
        CRUD::setModel(\App\Models\BilanCovid::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/bilancovid');
        CRUD::setEntityNameStrings('bilancovid', 'bilan_covid');
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
            'name' => 'bilanCovid_date',
            'type' => 'text',
            'label'=>'Date du bilan'
        ]);
        CRUD::addColumn([
            'name' => 'bilanCovid_nbre_cas_actif',
            'type' => 'text',
            'label'=>'Nombre de cas actifs'
        ]);
        CRUD::addColumn([
            'name' => 'bilanCovid_nbre_infectes',
            'type' => 'text',
            'label'=>'Nombre de personnes infectés'
        ]);
        CRUD::addColumn([
            'name' => 'bilanCovid_gueris',
            'type' => 'text',
            'label'=>'Nombre de personnes guéris'
        ]);
        CRUD::addColumn([
            'name' => 'bilanCovid_deces',
            'type' => 'text',
            'label'=>'Nombre de personnes décédés'
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
        CRUD::setValidation(BilanCovidRequest::class);

        //CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */

        CRUD::addField([
            'name' => 'bilanCovid_date',
            'type' => 'date_picker',
            'label'=>'Date du bilan'
        ]);
        CRUD::addField([
            'name' => 'bilanCovid_nbre_cas_actif',
            'type' => 'text',
            'label'=>'Nombre de cas actifs'
        ]);
        CRUD::addField([
            'name' => 'bilanCovid_nbre_infectes',
            'type' => 'text',
            'label'=>'Nombre de personnes infectés'
        ]);
        CRUD::addField([
            'name' => 'bilanCovid_gueris',
            'type' => 'text',
            'label'=>'Nombre de personnes guéris'
        ]);
        CRUD::addField([
            'name' => 'bilanCovid_deces',
            'type' => 'text',
            'label'=>'Nombre de personnes décédés'
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
