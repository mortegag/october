<?php namespace Acme\Demo\Components;

use Cms\Classes\ComponentBase;

class Todo extends ComponentBase
{

    /**
     * Este en un nombre de persona
     * @var string
     */
    public $name;

    /**
     * La coleccion de tareas
     * @var array
     */

    public $tasks;

    public function componentDetails()
    {
        return [
            'name'        => 'Todo Component',
            'description' => 'Base de datos de la Lista de Todo'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function init(){
        //este se ejecutara cuando el componente es
        //primero inicializado, incluyendo eventos AJAX
    }

    public function onRun(){
        //Este codgo no ejecutara eventos AJAX
        // {{ todoList.name }} (Estricto)
        $this->name ='Moises';

        // {}

        $this->page['name']='Moises';
       //$this->name = $this->page['name']='Moises';
        $this->tasks = [
            'Limpiar el garaje',
            'Sacar la basura',
            'Destapar el lavamano'
        ];


    }

    public function onAddItem(){
        $taskName = post('task');
    }


}
