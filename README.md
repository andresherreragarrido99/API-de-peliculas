# API de Películas

Aplicación web desarrollada en **PHP** y **Tailwind CSS** que consume la API REST de **The Movie Database (TMDB)** para mostrar un catálogo actualizado de las películas mejor valoradas (*Top Rated*).

---

##  Características

* **Consumo de API REST:** Integración con TMDB utilizando **GuzzleHttp**.
* **Arquitectura POO:** Uso de Clases PHP (`Pelicula`, `ApiUtil`) con propiedades *readonly* y promocionadas (PHP 8+).
* **Diseño Moderno y Responsivo:** Layout adaptativo en cuadrícula (*Grid*) de hasta 4 columnas, con efectos visuales (*Glassmorphism*, degradados y animación al pasar el cursor) implementado con **Tailwind CSS**.
* **Manejo de Imágenes:** Carga dinámica de pósteres a través del CDN de TMDB con imagen por defecto (*fallback*) en caso de ausencia de portada.

---

##  Tecnologías Utilizadas

* **Lenguaje:** PHP 8.x
* **Cliente HTTP:** Guzzle (`guzzlehttp/guzzle`)
* **Framework CSS:** Tailwind CSS (vía CDN)
* **API de Datos:** [The Movie Database (TMDB)](https://developer.themoviedb.org/)

---

## 🛠️ Instalación y Configuración

1. **Clonar el repositorio:**
   ```bash
   git clone [https://github.com/andresherreragarrido99/API-de-peliculas.git](https://github.com/andresherreragarrido99/API-de-peliculas.git)
   cd API-de-peliculas
