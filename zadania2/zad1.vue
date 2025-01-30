<template>
    <div id="app">
      <div class="gallery">
        <h1>Galeria Zdjęć</h1>
        <div class="image-container">
          <div v-for="(image, index) in images" :key="index" class="image-item">
            <img :src="image.src" :alt="image.alt" />
            <p>{{ image.alt }}</p>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        images: [
          { src: '1.jpg', alt: 'Zdjęcie 1' },
          { src: '2.jpg', alt: 'Zdjęcie 2' },
          { src: '3.jpg', alt: 'Zdjęcie 3' },
          { src: '4.jpg', alt: 'Zdjęcie 4' }
        ]
      };
    }
  };
  </script>
  
  <style>
  .gallery {
    text-align: center;
  }
  
  .image-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 16px;
  }
  
  .image-item {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 8px;
    max-width: 200px;
  }
  
  .image-item img {
    max-width: 100%;
    border-radius: 4px;
  }
  </style>
  
