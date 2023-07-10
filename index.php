<?php
require_once('helpers.php');
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);

$projekt = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];

$tasks = [
    [
        'name' => 'Собеседование в IT компании',
        'date' => '01.12.2019',
        'category'=> $projekt[2],
        'done' => false
    ],
    [
        'name' => 'Выполнить тестовое задание',
        'date' => '25.12.2019',
        'category'=> $projekt[2],
        'done' => false
    ],
    [
        'name' => 'Сделать задание первого раздела',
        'date' => '01.12.2019',
        'category'=> $projekt[1],
        'done' => true
    ],
    [
        'name' => 'Встреча с другом',
        'date' => '22.12.2019',
        'category'=> $projekt[0],
        'done' => false
    ],
    [
        'name' => 'Купить корм для кота',
        'date' => null,
        'category'=> $projekt[3],
        'done' => false
    ],
    [
        'name' => 'Заказать пиццу',
        'date' => null,
        'category'=> $projekt[3],
        'done' => false
    ],

];

$title = "Дела в порядке";

$content = include_template('main.php',['projekt'=>$projekt, 'tasks'=>$tasks, 'show_complete_tasks' => $show_complete_tasks]);
$layout = include_template('layout.php',['content'=>$content, 'title'=>$title]);
print($layout);
?>
