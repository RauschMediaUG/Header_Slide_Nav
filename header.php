<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="masthead" class="site-header" role="banner">
    <div class="header-inner">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="https://kundenprojekt.rausch-media.de/wp-content/uploads/2024/02/Logo_weiss-1.png" alt="Logo">
            </a>
        </div>
        <nav class="desktop-nav">
            <div class="slider"></div>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary', // Der Standort des Menüs, wie im Theme definiert.
                    'menu_id'        => 'primary-menu', // CSS-ID für das Menü.
                    'menu_class'     => 'primary-menu', // CSS-Klasse für das Menü.
                    'container'      => '', // Kein Container-Tag um das ul-Element.
                    'fallback_cb'    => false, // Kein Fallback, falls kein Menü definiert ist.
                ) );
            ?>
        </nav>
<button class="contact-button">
    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="button-icon">
        <path fill="currentColor" d="M2.678 11.894a1 1 0 0 1 .287.801a11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6s-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.10c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7s-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
    </svg>
    Kontaktieren Sie uns
</button>
    </div>
    
 
 
 
<div class="mobile-header">
    <div class="mobile-logo">
        <a href="<?php echo home_url(); ?>">
            <img src="https://kundenprojekt.rausch-media.de/wp-content/uploads/2024/02/Logo_weiss-1.png" alt="Logo">
        </a>
    </div>
    
 <div class="mobile-nav-button">
<svg class="ham hamRotate ham4" viewBox="0 0 100 100" overflow="visible" onclick="this.classList.toggle('active'); toggleMobileMenu();">
<path class="line top" 
        d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
<path class="line middle"
        d="m 70,50 h -40" />
<path class="line bottom" 
        d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
</svg>
<div class="mobile-nav">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary', // Der Standort des Menüs, wie im Theme definiert.
                    'menu_id'        => 'mobile-menu', // CSS-ID für das Menü.
                    'menu_class'     => 'mobile-menu', // CSS-Klasse für das Menü.
                    'container'      => '', // Kein Container-Tag um das ul-Element.
                    'fallback_cb'    => false, // Kein Fallback, falls kein Menü definiert ist.
                ) );
            ?>
	<button class="contact-button-mobile">
    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="button-icon">
        <path fill="currentColor" d="M2.678 11.894a1 1 0 0 1 .287.801a11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6s-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.10c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7s-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
    </svg>
    Kontaktieren Sie uns
</button>
</div>
</div>
<div class="overlay"></div>
</div>




</header><!-- #masthead -->

<div id="content" class="site-content">


<script>
const mobileNavButton = document.querySelector('.mobile-nav-button');
const overlay = document.querySelector('.overlay');

// Add an event listener to the .ham4 element itself
const ham4 = document.querySelector('.ham4');
ham4.addEventListener('click', () => {
    overlay.classList.toggle('visible');
});

function toggleMobileMenu() {
    var mobileNav = document.querySelector('.mobile-nav');
    mobileNav.classList.toggle('visible');
}

document.addEventListener("DOMContentLoaded", function() {
    // Selektiert alle Links innerhalb der Navigation
    document.querySelectorAll("nav ul li a").forEach(link => {
        // Berechnet die natürliche Breite des Links basierend auf seinem Inhalt
        const contentWidth = link.offsetWidth;

        // Setzt die berechnete Breite explizit auf den Link
        link.style.width = `${contentWidth}px`;
    });

    const slider = document.querySelector(".slider");
    const nav = document.querySelector("nav");

    document.querySelectorAll("nav ul li a").forEach(link => {
        link.addEventListener("mouseenter", function() {
            const linkRect = this.getBoundingClientRect();
            const navRect = nav.getBoundingClientRect();

            // Passt die Breite und Position des Sliders an den Link an
            slider.style.width = `${linkRect.width}px`;
            slider.style.left = `${linkRect.left - navRect.left}px`;
            slider.style.opacity = '1';
            slider.style.display = 'block';
        });

        link.addEventListener("mouseleave", function() {
            // Optional: Verstecke den Slider, wenn die Maus das Link verlässt
            // slider.style.opacity = '0';
            // slider.style.display = 'none';
        });
    });

    // Versteckt den Slider, wenn die Maus das Navigationsmenü verlässt
    nav.addEventListener("mouseleave", () => {
        slider.style.opacity = '0'; // Slider verstecken
    });
});


// Verwaltung der active-link Klasse für primäre Menülinks bei Hover
document.querySelectorAll('.primary-menu li a').forEach(link => {
    link.addEventListener('mouseenter', function() {
        // Füge die active-link Klasse zum gehoverten Link hinzu
        this.classList.add('active-link');
    });

    link.addEventListener('mouseleave', function() {
        // Entferne die active-link Klasse, wenn die Maus das Element verlässt
        this.classList.remove('active-link');
    });
});

// Optional: Halte die active-link Klasse auf dem zuletzt gehoverten Link, wenn das Sub-Menü gehovert wird
let lastHoveredLink = null;
document.querySelectorAll('.primary-menu li').forEach(item => {
    const link = item.querySelector('a');
    const subMenu = item.querySelector('.sub-menu'); // Annahme, dass das Sub-Menü eine Klasse .sub-menu hat

    if (subMenu) {
        subMenu.addEventListener('mouseenter', function() {
            if (lastHoveredLink) {
                lastHoveredLink.classList.add('active-link');
            }
        });

        subMenu.addEventListener('mouseleave', function() {
            if (lastHoveredLink) {
                lastHoveredLink.classList.remove('active-link');
            }
        });

        link.addEventListener('mouseenter', function() {
            lastHoveredLink = this; // Aktualisiere den zuletzt gehoverten Link
        });
    }
});
	
	
function closeMobileMenu() {
    var mobileNav = document.querySelector('.mobile-nav');
    mobileNav.classList.remove('visible'); // Entfernt die 'visible'-Klasse vom mobilen Menü
    overlay.classList.remove('visible'); // Entfernt die 'visible'-Klasse vom Overlay
    ham4.classList.remove('active'); // Entfernt die 'active'-Klasse vom Hamburger-Menü-Button
}

// Event-Listener für das Overlay, um das Menü zu schließen
overlay.addEventListener('click', closeMobileMenu);
</script>

<style>

.logo {
width:	20%;
	padding-top: 10px;
}

.logo img {
	width: 250px;
	height: auto;
}

nav {
		width: 60%;
}

nav ul {
    display: flex;
    justify-content: flex-end; /* Richtet die Kinder (li) rechts aus */
    list-style: none; /* Entfernt Listensymbole */
    padding: 0; /* Entfernt Standard-Padding */
    margin: 0; /* Entfernt Standard-Margins */
}

.header-inner {
    display: flex;
    width: 1220px;
    margin: auto;
    justify-content: space-between;
    align-items: center; 
	padding-top: 15px;
	padding-bottom: 15px;
	padding-left: 20px;
	padding-right: 20px;
}

.contact-button {
    border-radius: 3rem;
    font-size: 16px;
    color: white;
    background-color: var(--color-cyan); 
    border: none;
    cursor: pointer;
    transition: all 0.35s ease-in-out;
    text-decoration: none;
    margin-left: 20px; 
	padding: 13px 20px;
	color: var(--color-deep-navy);
	    filter: drop-shadow(0 4px 4px rgba(0, 0, 0, 0.25));
    display: flex; 
    align-items: center; 
    justify-content: center; 
    gap: 6px; 
}

.contact-button-mobile {
    border-radius: 18px;
    padding: 12px 24px;
    color: var(--color-deep-navy);
    font-weight: 400;
    display: flex;
    align-items: center;
    font-size: 18px;
    text-decoration: none;
	margin: 20px;
	border: none;
	margin-top: 0px;
	    background-color: var(--color-cyan); 
	color: var(--color-deep-navy);
	margin-top: 10px;
	    filter: drop-shadow(0 4px 4px rgba(0, 0, 0, 0.15));
}


.contact-button-mobile svg {
margin-right: 8px;
    vertical-align: middle;
    width: 1rem;
    height: 1rem;
    scale: 0;
    transform-origin: -0.4rem 50%;
    width: 20px;
    height: 15px;}

.visible svg {
    scale: 1 !important;
    margin: 0 0.4rem 0 0;
    filter: invert(7%) sepia(98%) saturate(2058%) hue-rotate(231deg) brightness(99%) contrast(127%);
}


nav ul li {
    margin-left: 20px; /* Fügt einen Abstand zwischen den Listenelementen hinzu */
}


nav {
	position: relative;
	&.animate {
		.slider {
			transition: all 350ms ease-in-out;
		}
	}
	&:hover {
		.slider {
			opacity: 1;
		}
	}
.slider {
    position: absolute;
    top: 0;
    z-index: 1;
    height: 100%;
    background-color: white; 
    border-radius: 3rem;
    transition: all 350ms ease-in-out;
    display: none;
    /* Glas-Effekt */
    backdrop-filter: blur(10px); /* Weichzeichnen des Hintergrunds */
    -webkit-backdrop-filter: blur(10px); 
    opacity: 0;
}
	ul {
		position: relative;
		z-index: 2;
		display: flex;
		gap: 0.0rem;
		margin: 0;
		padding: 0;
		li {
			list-style: none;
			position: relative;
			&:hover {
				a {
					img {
						scale: 1;
						margin: 0 0.5rem 0 0;
					}
				}
				ul {
					max-height: 9.5rem;
					opacity: 1;
				}
			}
			a {
    padding: 0.6rem 2rem;
    border-radius: 3rem;
    font-size: 0.8rem;
    color: white;
    cursor: pointer;
    transition: all 350ms ease-in-out;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    text-decoration: none;
				white-space: nowrap;
				img {
					width: 1rem;
					height: 1rem;
					scale: 0;
					margin: 0 -1rem 0 0;
					transform-origin: -0.4rem 50%;
					transition: all 350ms ease-in-out;
filter: invert(7%) sepia(98%) saturate(2058%) hue-rotate(231deg) brightness(99%) contrast(127%);


				}
			}
			ul {
				position: absolute;
				overflow: hidden;
				top: 110%;
				width: 100%;
				max-height: 0;
				opacity: 0;
				transition: all 350ms ease-in-out;
				margin: 0;
				display: flex;
				flex-direction: column;
				background-color: white;
				border-radius: 1rem;
				gap: 0.1rem;
				padding: 0.2rem 0;
box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
				li {
					padding: 0 0.2rem;
					margin: 0;
					width: 100%;
					list-style: none;
					a {
						width: 100%;
						border-radius: 0.95rem;
						padding: 0.5rem 0.5rem;
						&:hover {
							background-color: var(--color-light-gray);
						}
					}
				}
			}
		}
	}
}

ul li a::after {
    content: '';
    position: absolute;
    bottom: -5px; /* Anpassen basierend auf der Größe des Spalts */
    left: 0;
    width: 100%;
    height: 5px; /* Anpassen basierend auf der Größe des Spalts */
    background: transparent;
}


#primary-menu a{
	transition: all 0.5s ease-in-out
}

#primary-menu a:hover{
	color: var(--color-deep-navy);
	transition: all 0.35s ease-in-out
}

.active-link {
		color: var(--color-deep-navy);
}

.sub-menu a {
		color: var(--color-deep-navy);
}

.mobile-header {
padding: 10px;
    display: flex;
    justify-content: space-between; 
    align-items: center;
	padding-left: 20px;
	padding-right: 20px;
	position: relative;
}

.mobile-nav-button {
    display: flex;
    position: relative;
    width: 50%;
}

.mobile-nav-button svg{
z-index: 101;
}

.mobile-nav {
    position: absolute;
    overflow: hidden;
    top: 100%;
	right: 0px;
    max-height: 0;
    opacity: 0;
    transition: all 450ms ease-in-out;
    margin: 0;
    display: flex;
    flex-direction: column;
    background-color: white;
    border-radius: 1rem;
	filter: drop-shadow(0 4px 4px rgba(0, 0, 0, 0.25));
	justify-content: flex-end;
	width: auto;
	z-index: 101;
}

.mobile-nav.visible {
    opacity: 1;
    top: 120%;
    max-height: 500px; 
}

.mobile-menu li {
    margin: 0;
    list-style: none;
	position: relative;
}

.mobile-nav a {
    width: 100%;
  border-radius: 18px;
    padding: 12px 24px;
    color: var(--color-deep-navy);
    font-weight: 400;
    display: flex; 
    align-items: center;
    font-size: 18px;
    text-decoration: none;
}

.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0; 
    transition: opacity 450ms ease-in-out; 
    pointer-events: none; 
    z-index: 10; 
		    background: #3d4a4a9c; 
    transition: opacity 450ms ease-in-out; 
}

.overlay.visible {
    opacity: 1; 
    pointer-events: auto;
}


.visible img {
    scale: 1 !important;
    margin: 0 0.5rem 0 0;
    filter: invert(7%) sepia(98%) saturate(2058%) hue-rotate(231deg) brightness(99%) contrast(127%);
}

.mobile-nav a img {
    margin-right: 8px; 
    vertical-align: middle;
    width: 1rem;
    height: 1rem;
    scale: 0;
    transform-origin: -0.4rem 50%;
    transition: all 450ms ease-in-out;
	width: 20px;
	height: 20px;
}

.sub-menu a {
	font-size: 14px;
}

.mobile-nav a:hover {
								background-color: var(--color-light-gray);
}

.mobile-nav a img.filter {
    filter: invert(7%) sepia(98%) saturate(2058%) hue-rotate(231deg) brightness(99%) contrast(127%);
}




.mobile-menu {
	margin: 0px;
padding: 20px;
padding-bottom: 0px;
padding-top: 20px;
}

.mobile-nav img {
	width: 20px;
	height: auto;
}

.mobile-logo img {
    width: 180px;
    height: auto;
	padding-top:10px;
}

@media (max-width: 1180px) {
.header-inner {
    display: none;
	}}

@media (min-width: 1181px) {
.mobile-header {
    display: none;
	}}

.ham {
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
    transition: transform 400ms;
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
width: 45px;
	background:  white;
	border-radius: 100%;
	    margin-left: auto;
}

.hamRotate.active {
    transform: rotate(45deg);
}

.ham4.active .top {
    stroke-dashoffset: -78px;
}

.ham4 .top {
    stroke-dasharray: 30 121;
}
.line {
    fill: none;
    transition: stroke-dasharray 400ms, stroke-dashoffset 400ms;
    stroke: var(--color-deep-navy);
    stroke-width: 5.5;
    stroke-linecap: round;
    transform: translateZ(0); /* Erzwingt Hardware-Beschleunigung */
}

.line {
    will-change: stroke-dasharray, stroke-dashoffset;
}

.ham4.active .bottom {
    stroke-dashoffset: -78px;
}
.ham4 .bottom {
    stroke-dasharray: 30 121;
}
	
	
	@media (max-width: 530px) {
    .mobile-nav a {
        margin-right: 20px; /* Fügt rechts einen zusätzlichen Abstand hinzu */
    }
}

</style>
