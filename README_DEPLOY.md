# KUNA listo para Vercel / Netlify

Este paquete ya no usa PHP. La entrada principal es `index.html`.

## Vercel
- Framework Preset: Other
- Build Command: dejar vacío
- Output Directory: `.`

## Netlify
- Build command: dejar vacío
- Publish directory: `.`

## Importante
Sube el contenido de este ZIP directamente, no una carpeta extra que contenga el proyecto.
La estructura correcta debe quedar:

```
index.html
assets/
favicon.ico
```

El formulario está configurado para Netlify Forms. En Vercel se verá la página, pero el formulario no guardará envíos a menos que conectes un servicio externo.
