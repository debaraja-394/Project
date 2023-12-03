async function fetchRandomImage6() {
    const response = await fetch('https://source.unsplash.com/random');
    const imageUrl = response.url;

 
    document.querySelector('#randomImage6').src = imageUrl;
  }

      fetchRandomImage6();