const scrollBtnFirst = document.getElementById('scroll-btn-1');
const scrollBtnSecond = document.getElementById('scroll-btn-2');
const scrollBtnThird = document.getElementById('scroll-btn-3');

const seeMoreSection = document.querySelector('.more-container');
const featuresSection = document.querySelector('.features-container');
const gallerySection = document.querySelector('.gallery-container');

//SEE MORE BUTTON

scrollBtnFirst.addEventListener('click', () => {
  seeMoreSection.scrollIntoView({ behavior: 'smooth', block: 'start' });

  const plainText = seeMoreSection.querySelector('p');
  const imgGif = seeMoreSection.querySelector('img');

  if (plainText) plainText.classList.add('animate-fadeInText');
  
  if (imgGif) {
    setTimeout(() => {
      imgGif.classList.add('show');
    }, 500);
  }
  setTimeout(() => {
    scrollBtnSecond.classList.add('show');
  }, 1000);
});

//SEE FEATURES BUTTON

scrollBtnSecond.addEventListener('click', () => {
  featuresSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
  featuresSection.classList.add('show');

  const featuresTitle = featuresSection.querySelector('h2');
  const featuresItems = featuresSection.querySelectorAll('li');

  if (featuresTitle) 
    featuresTitle.classList.add('animate-fadeIn');

  featuresItems.forEach((item, index) => {
    setTimeout(() => {
      item.classList.add('animate-fadeIn');
    }, index * 400);
  });

  setTimeout(() => {
    scrollBtnThird.classList.add('show');
  }, 1000);
});

//SEE GALLERY BUTTON

scrollBtnThird.addEventListener('click', () => {
  gallerySection.scrollIntoView({ behavior: 'smooth', block: 'start' });

  gallerySection.classList.add('show');
});