// const textContents = document.querySelectorAll('.text-content');
// const dots = document.querySelectorAll('.dot');
// const imageElement = document.getElementById('dynamicImage');
// let currentIndex = 0;

// // Scroll event listener
// document.querySelector('.text-wrapper').addEventListener('scroll', (event) => {
//     const scrollTop = event.target.scrollTop;
//     const sectionHeight = window.innerHeight;
//     const index = Math.floor(scrollTop / sectionHeight);

//     if (index !== currentIndex) {
//         currentIndex = index;
//         updateContent(currentIndex);
//     }
// });

// function updateContent(index) {
//     textContents.forEach((section, idx) => {
//         section.classList.toggle('active', idx === index);
//     });

//     dots.forEach((dot, idx) => {
//         dot.classList.toggle('active', idx === index);
//     });

//     // You can change the image based on the index if needed
//     const images = [
//         '/wp-content/themes/thrillx/resources/imgs/support-slide-one.jpeg',
//         '/wp-content/themes/thrillx/resources/imgs/support-slide-two.jpeg',
//         '/wp-content/themes/thrillx/resources/imgs/support-slide-three.jpeg',
//         '/wp-content/themes/thrillx/resources/imgs/support-slide-four.jpeg'
//     ];
//     imageElement.src = images[index] || images[0]; // Default to first image if index is out of range
// }




if (typeof window.IntersectionObserver !== 'undefined') {
  const options = {
    threshold: [0.2] // Trigger observer when 20% of the section is in view
  };
  
  const targets = document.querySelectorAll('.scroll-text-section');
  const images = document.querySelectorAll('.scroll-image');
  const dots = document.querySelectorAll('.pagination .dot'); // Pagination dots
  let currentIndex = 0;

  // IntersectionObserver callback
  function handleIntersection(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Activate the corresponding text and image
        const section = entry.target;
        const imageId = section.dataset.swap;
        
        // Activate text
        section.classList.add('active');
        
        // Activate corresponding image
        images.forEach(image => {
          if (image.dataset.id === imageId) {
            image.classList.add('active');
          } else {
            image.classList.remove('active');
          }
        });

        // Sync the pagination dots based on the current section
        const index = Array.from(targets).indexOf(section);
        if (index !== currentIndex) {
          currentIndex = index;
          updatePagination();
        }
      } else {
        // Deactivate text when it's out of view
        const section = entry.target;
        section.classList.remove('active');
        
        // Deactivate corresponding image
        const imageId = section.dataset.swap;
        images.forEach(image => {
          if (image.dataset.id === imageId) {
            image.classList.remove('active');
          }
        });
      }
    });
  }

  const observer = new IntersectionObserver(handleIntersection, options);
  targets.forEach(target => observer.observe(target));

  // Function to update the pagination dots
  function updatePagination() {
    dots.forEach((dot, index) => {
      dot.classList.toggle('active', index === currentIndex);
    });
  }

} else {
  // Fallback: Manually handle the activation of sections (if needed)
}
