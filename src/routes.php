<?php

// list of accessible routes of your application, add every new route here
// key : route to match
// values : 1. controller name
//          2. method name
//          3. (optional) array of query string keys to send as parameter to the method
// e.g route '/item/edit?id=1' will execute $itemController->edit(1)
return [
    '' => ['HomeController', 'index',],
    'activity' => ['ActivityController', 'index',],
    'activity/indexAdmin' => ['ActivityController', 'indexAdmin'],
    'activity/add' => ['ActivityController', 'add'],
    'activity/delete' => ['ActivityController', 'delete'],
    'event/indexAdmin' => ['EventController', 'indexAdmin'],
    'items' => ['ItemController', 'index',],
    'items/edit' => ['ItemController', 'edit', ['id']],
    'items/show' => ['ItemController', 'show', ['id']],
    'items/add' => ['ItemController', 'add',],
    'items/delete' => ['ItemController', 'delete',],
    'circuits' => ['CircuitController', 'index',],
    'admin/circuits' => ['CircuitController', 'addCircuit'],
    'contact' => ['ContactController', 'index',['answer']],
    'circuits/show' => ['CircuitController', 'show', ['id']],
    'especes' => ['OrganismController', 'index'],
    'landscape' => ['LandscapeController', 'index',],
];
