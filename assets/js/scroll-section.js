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
