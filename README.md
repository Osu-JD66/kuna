# KUNA en PHP, HTML, CSS y JavaScript

Conversión del proyecto original de Next.js/React a una versión clásica lista para hosting con PHP.

## Estructura

```text
kuna_php/
├── index.php
├── assets/
│   ├── css/style.css
│   ├── js/main.js
│   └── images/
└── README.md
```

## Cómo ejecutarlo

Con PHP instalado:

```bash
php -S localhost:8000
```

Luego abre `http://localhost:8000` en el navegador.

## Notas

- No requiere Node.js, Next.js, React ni Tailwind.
- El formulario muestra una confirmación en pantalla usando PHP.
- Las animaciones de scroll y el menú móvil están en `assets/js/main.js`.
- Los estilos están en `assets/css/style.css`.
