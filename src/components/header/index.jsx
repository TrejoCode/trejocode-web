/**
 * @version 1.0.1
 * @author Trejocode - Sergio
 * @description Componente del <Header />
*/

import React, { memo }  from 'react';
import Link             from 'next/link';
import { AiFillLinkedin, AiFillFacebook, AiFillYoutube, AiFillInstagram } from 'react-icons/ai';

const Header = () => {
    return(
        <header className="justify-center" id = "header">
            <div className="container">
                <div className="left row align-center auto">
                    <div className="logo">
                        <Link href="/">
                            <a aria-label="Trejocode Logo Inicio" role="img">
                                <img src="/img/logo.png" alt="Trejocode logo" title="Trejocode logo" className="wow fadeInLeft" />
                            </a>
                        </Link>
                    </div>
                </div>
                <div className="right full">
                    <nav>
                        <Link href="/">
                            <a className="color-secondary weight-semi wow fadeInLeft" data-wow-delay="200ms">
                                Inicio
                            </a>
                        </Link>
                        <a href="/#services" className="color-secondary weight-semi wow fadeInLeft" data-wow-delay="200ms">
                            Servicios
                        </a>
                        <a href="/#about" className="color-secondary weight-semi wow fadeInLeft" data-wow-delay="250ms">
                            Cónoceme
                        </a>
                        <Link href="/portafolio">
                            <a className="color-secondary weight-semi wow fadeInLeft" data-wow-delay="250ms">
                                Proyectos
                            </a>
                        </Link>
                        <a href="/#contact" className="color-secondary weight-semi wow fadeInLeft" data-wow-delay="300ms">
                            Contáctame
                        </a>
                    </nav>
                    <div className="social auto wow align-center fadeInLeft">
                        <a aria-label="LinkedIn" data-wow-delay="350ms" rel="noopener" target="_blank" className="align-center wow fadeIn"
                        href="https://www.linkedin.com/in/sergio-alejandro-trejo-cuxim-11b40a17a">
                            <AiFillLinkedin size = { 18 } title = "Icono de LinkedIn" />
                        </a>
                        <a aria-label="Facebook" data-wow-delay="350ms" rel="noopener" target="_blank" className="align-center wow fadeIn"
                        href="https://www.facebook.com/TrejoCode/">
                            <AiFillFacebook size = { 18 } title = "Icono de Facebook" />
                        </a>
                        <a aria-label="Youtube" data-wow-delay="400ms" rel="noopener" target="_blank" className="align-center wow fadeIn"
                        href="https://www.youtube.com/trejocode">
                            <AiFillYoutube size = { 18 } title = "Icono de Youtube" />
                        </a>
                        <a aria-label="Instagram" data-wow-delay="400ms" rel="noopener" target="_blank" className="align-center wow fadeIn"
                        href="https://www.instagram.com/trejocode/" >
                            <AiFillInstagram size = { 18 } title = "Icono de Instagram" />
                        </a>
                    </div>
                </div>
            </div>
        </header>
    );
};

export default memo(Header);