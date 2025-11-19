@extends('layouts.app')

@section('title', 'Nuestro Equipo - UED')

@section('content')

    <section id="equipo" class="bg-light">
        <h2 class="text-center mb-4" style="color: var(--color-azul);">Nuestro Equipo</h2>
        <p class="text-center lead mb-5">Conoce a los profesionales que hacen posible la educación a distancia en nuestra universidad.</p>
        
        {{-- Sección para la foto grupal (banner) --}}
        <div class="team-group-photo-container text-center mb-5">
            <img src="{{ asset('images/educacion.png') }}" alt="Foto Grupal Equipo UED" 
                 class="img-fluid" 
                 style="width: 100%; 
                        height: 450px; /* AUMENTAMOS LA ALTURA SIGNIFICATIVAMENTE */
                        object-fit: cover; 
                        object-position: top center !important; /* Mantiene el enfoque en la parte superior */
                        border: none !important; 
                        border-radius: 0 !important;">
        </div>

        {{-- Contenedor para los miembros individuales --}}
        <div class="container mt-5">
            <h3 class="mb-4" style="color: #212529;">Personal.</h3>

            <div class="row justify-content-start">
                
                <div class="col-md-3 text-center">
                    <div class="team-member" 
                         style="background-color: #ffffff; 
                                border-radius: 8px; 
                                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08); 
                                padding: 0; 
                                margin-bottom: 2rem; 
                                overflow: hidden; 
                                border: none !important;">
                        <img src="{{ asset('images/orlando.png') }}" alt="Dr. Orlando Ascayo León" 
                             style="border: 2px solid rgba(0, 0, 0, 0.05) !important; 
                                    border-radius: 0 !important; 
                                    width: calc(100% - 4px); 
                                    height: 280px; 
                                    object-fit: cover; 
                                    object-position: 50% 35% !important; 
                                    margin-top: 2px; margin-bottom: 2px; margin-left: 2px; margin-right: 2px;">
                        <h4 style="margin-top: 1rem; margin-bottom: 0.25rem; text-transform: uppercase;">DR. ORLANDO ASCAYO LEÓN</h4>
                        <p class="text-muted" style="margin-bottom: 1rem;">JEFE DE LA UNIDAD</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="team-member"
                         style="background-color: #ffffff; 
                                border-radius: 8px; 
                                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08); 
                                padding: 0; 
                                margin-bottom: 2rem; 
                                overflow: hidden;
                                border: none !important;">
                        <img src="{{ asset('images/sergio.png') }}" alt="Sergio Sacramento Gúzman"
                             style="border: 2px solid rgba(0, 0, 0, 0.05) !important; 
                                    border-radius: 0 !important; 
                                    width: calc(100% - 4px); 
                                    height: 280px; 
                                    object-fit: cover; 
                                    object-position: 50% 35% !important; 
                                    margin-top: 2px; margin-bottom: 2px; margin-left: 2px; margin-right: 2px;">
                        <h4 style="margin-top: 1rem; margin-bottom: 0.25rem; text-transform: uppercase;">SERGIO ERICK SACRAMENTO GUZMAN</h4>
                        <p class="text-muted" style="margin-bottom: 1rem;">TÉCNICO EN MARKETING</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="team-member"
                         style="background-color: #ffffff; 
                                border-radius: 8px; 
                                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08); 
                                padding: 0; 
                                margin-bottom: 2rem; 
                                overflow: hidden;
                                border: none !important;">
                        <img src="{{ asset('images/ana.png') }}" alt="Ana Ramos"
                             style="border: 2px solid rgba(0, 0, 0, 0.05) !important; 
                                    border-radius: 0 !important; 
                                    width: calc(100% - 4px); 
                                    height: 280px; 
                                    object-fit: cover; 
                                    object-position: 50% 35% !important; 
                                    margin-top: 2px; margin-bottom: 2px; margin-left: 2px; margin-right: 2px;">
                        <h4 style="margin-top: 1rem; margin-bottom: 0.25rem; text-transform: uppercase;">ANA MARIA RAMOS MARIN</h4>
                        <p class="text-muted" style="margin-bottom: 1rem;">PRACTICANTE</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="team-member"
                         style="background-color: #ffffff; 
                                border-radius: 8px; 
                                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08); 
                                padding: 0; 
                                margin-bottom: 2rem; 
                                overflow: hidden;
                                border: none !important;">
                        <img src="{{ asset('images/kamhil.png') }}" alt="Kamhil Martel Robles"
                             style="border: 2px solid rgba(0, 0, 0, 0.05) !important; 
                                    border-radius: 0 !important; 
                                    width: calc(100% - 4px); 
                                    height: 280px; 
                                    object-fit: cover; 
                                    object-position: 50% 35% !important; 
                                    margin-top: 2px; margin-bottom: 2px; margin-left: 2px; margin-right: 2px;">
                        <h4 style="margin-top: 1rem; margin-bottom: 0.25rem; text-transform: uppercase;">KAMHIL FARID MARTEL ROBLES</h4>
                        <p class="text-muted" style="margin-bottom: 1rem;">PRACTICANTE</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
@endsection