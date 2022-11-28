<?php

if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Настройки сайта')
    ->add_tab('Общие настройки', array(
        Field::make('image', 'main_cover', 'Обложка для главной страницы'),
        Field::make('text', 'intro_title', 'Заголовок в интро'),
        Field::make('text', 'service_first_title', 'Заголовок первой услуги'),
        Field::make('text', 'service_second_title', 'Заголовок второй услуги'),
        Field::make('text', 'service_third_title', 'Заголовок третьей услуги'),
        Field::make('image', 'service_first_image', 'Изображение первой услуги'),
        Field::make('image', 'service_second_image', 'Изображение второй услуги'),
        Field::make('image', 'service_third_image', 'Изображение третьей услуги'),
        Field::make('text', 'service_first_call', 'Призыв первой услуги'),
        Field::make('text', 'service_second_call', 'Призыв второй услуги'),
        Field::make('text', 'service_third_call', 'Призыв третьей услуги'),
        Field::make('text', 'about_title', 'О нас - заголовок'),
        Field::make('text', 'about_text', 'О нас - текст'),
        Field::make('text', 'advantage_firsttitle', 'Преимущества - первый заголовок'),
        Field::make('text', 'advantage_firsttext', 'Преимущества - первый текст'),
        Field::make('text', 'advantage_secondtitle', 'Преимущества - второй заголовок'),
        Field::make('text', 'advantage_secondtext', 'Преимущества - второй текст'),
        Field::make('text', 'advantage_thirdtitle', 'Преимущества - третий заголовок'),
        Field::make('text', 'advantage_thirdtext', 'Преимущества - третий текст'),
    ));
