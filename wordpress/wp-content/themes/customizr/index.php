<?php
/**
 * The main template file. Includes the loop.
 *
 *
 * @package Customizr
 * @since Customizr 1.0
 */
?>
<?php do_action( '__before_main_wrapper' ); ##hook of the header with get_header ?>
<?php tc__f('rec' , __FILE__ , __FUNCTION__ ); ?>
<div id="main-wrapper" class="<?php echo apply_filters('__main_wrapper_classes', 'container') ?>">

    <?php do_action( '__before_main_container' ); ##hook of the featured page (priority 10) and breadcrumb (priority 20)...and whatever you need! ?>
    
    <div class="container" role="main">
        <div class="row">

            <?php do_action( '__before_article_container'); ##hook of left sidebar?>
                
                <div id="content" class="<?php echo tc__f( '__screen_layout' , tc__f ( '__ID' ) , 'class' ) ?> article-container">
                    
                    <?php do_action ('__before_loop');##hooks the header of the list of post : archive, search... ?>

                        <?php if ( tc__f('__is_no_results') || is_404() ) : ##no search results or 404 cases ?>

                            <article <?php tc__f('__article_selectors') ?>>
                                <?php do_action( '__loop' ); ?>
                            </article>
                            
                        <?php endif; ?>

                        <?php if ( have_posts() && !is_404() ) : ?>
                            <?php while ( have_posts() ) : ##all other cases for single and lists: post, custom post type, page, archives, search, 404 ?>
                                <?php the_post(); ?>

                                <?php do_action ('__before_article') ?>
                                    <article <?php tc__f('__article_selectors') ?>>
                                        <?php do_action( '__loop' ); ?>
                                    </article>
                                <?php do_action ('__after_article') ?>

                            <?php endwhile; ?>

                        <?php endif; ##end if have posts ?>

                    <?php do_action ('__after_loop');##hook of the comments and the posts navigation with priorities 10 and 20 ?>

                </div><!--.article-container -->

           <?php do_action( '__after_article_container'); ##hook of left sidebar?>

        </div><!--.row -->
    </div><!-- .container role: main -->

    <?php do_action( '__after_main_container' ); ?>

</div><!--#main-wrapper"-->

<!-- ENCABEZADO -->
    <div class="header-simpus">
        
        <!-- ENCABEZADO FIXED :: ALL SITES HAVE THIS -->
        <div class="menu_fixed_content">
          
            <!-- logo -->
            <div class="header_logo" data-toggle="tooltip" data-placement="left" data-original-title="Simpus"></div>
            
            <!-- barra menu fixed -->
            <div class="header_barra_menu_superior">
                <ul>
                    <li><a  href="http://alfonso-pc/simpus">Software</a></li>
                    <!--<li><a href="#">Dominios</a></li>-->
                    <li><a id="activo_sup" href="http://alfonso-pc/simpus/wordpress">Blog</a></li>
                    <li><a href="#">Noticias</a></li>
                </ul>
            </div>

            <!-- formulario buscar: it searchs depending the site where it is and making a google search -->
            <div class="barra_buscar">
                <form class="form_busqueda" action="simpus/buscar" accept-charset="UTF-8" method="post" id="">
                    <input id="search-q" name="busqueda" maxlength="128" size="15" title="Escribe algo de tu interés" placeholder="Búsqueda" type="text">
                    <input id="search-submit" name="op" value="Buscar" type="submit">
                </form>
            </div>
         
             <!-- inicio de sesión :: for comment in blogs and for adquiring software and services -->
            <div class="inicio_sesion dropdown">
                <span class="candado_inicio glyphicon glyphicon-user"></span>
                <a id="ijq" data-toggle="dropdown" href="#">
                  <span class="texto_inicio">Iniciar sesión</span>
                  <span class="flecha_inicio"></span>
                  <div id="sign-in" class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li><a  stlye="visibility: hidden" href="">Regístrate</a></li>
                        <li class="divider"></li>
                        <form style="padding: 10px;" action="">
                            <p><input class="texto" type="text" name="usuario" placeholder="Correo electrónico"></p>
                            <p><input class="texto" type="password" name="cont" placeholder="Contraseña"></p>
                            <p><input class="btn btn-primary" type="submit"  value="Iniciar sesión"></p>
                        </form>
                  </div>
                </a>
            </div>
        </div>
        <div class="header_barra_divisor"></div>
    </div>

<?php do_action( '__after_main_wrapper' );##hook of the footer with get_get_footer ?>