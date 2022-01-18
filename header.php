<?php
/**
 * Template for the standard site header
 * 
 * @author Flawedspirit
 * @package FlawedspiritWP
 * @since 1.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head id="top">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body class=<?php body_class(); ?>>
    <?php get_template_part('template-parts/content/content', 'nav'); ?>

    <main class="container">
        <div class="row">
            <section id="primary" class="content-area col-xl-8 order-2 order-xl-1 mb-3">
