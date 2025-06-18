# Minimal Symfony App with Workerman on Scratch

This Docker image showcases a **minimal setup of a Symfony application** running with [Workerman](https://github.com/walkor/workerman) on a `scratch` base image.  
The entire application is compiled into a **single static binary** using [static-php-cli](https://github.com/crazywhalecc/static-php-cli), resulting in an image size of **less than 5MB**.

## 🚀 Key Features

- ⚡ **Ultra-small** Docker image (<5MB)
- 🧱 Based on `scratch` — no OS layer
- ⚙️ Runs Symfony with **Workerman** (async, **multi-threaded** PHP server)
- 🧰 Compiled into a single binary with `static-php-cli`
- 🧪 Intended as a **proof of concept**, not for production use

## ⚙️ How to Run

Make sure you have Docker installed. To run the image and expose the app on port `8080`:

```bash
docker run --rm -p 8080:8080 crazygoat/small-php
```

Then open your browser and navigate to:
```bash
http://localhost:8080
```
✅ The server will start automatically and listen on port `8080`.


## ⚠️ Limitations

- 📄 Logging must go to `stdout`/`stderr` (file-based logging not supported)
- 🧩 Not all PHP extensions are supported (depends on static PHP build)
- 🔧 Only basic Symfony functionality tested

## 📦 Use Cases

This image is meant for **experimentation and educational purposes** — to demonstrate how far PHP and Symfony can be minimized and containerized.  
It is not optimized or recommended for production environments.

## 📝 Notes

- This is **not a general-purpose PHP image**.
- Ideal for demos, technical showcases, or learning how static PHP binaries and `scratch` images work.
- Thanks to Workerman, this setup supports **multi-threaded** request handling (via event loops and worker processes).

## 🔗 Related Projects

- [static-php-cli](https://github.com/crazywhalecc/static-php-cli)
- [walkor/workerman](https://github.com/walkor/workerman)
- [Symfony](https://symfony.com/)
