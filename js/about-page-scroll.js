const btnSkills = document.getElementById('scroll-exp');
const btnExperience = document.getElementById('experience-btn');

const experienceTitle = document.querySelector('.experience h1');
const sections = document.querySelectorAll('.software, .languages, .libraries');
const icons = document.querySelectorAll('.software-stack, .language-stack, .library-stack');

function showExperienceSection() {
  experienceTitle.classList.add('animate-fadeInText');

  sections.forEach(section => {
    section.style.opacity = '1';
  });

  icons.forEach((icon, index) => {
    setTimeout(() => {
      icon.classList.add('animate-fadeIn');
    }, index * 200);
  });

  document.querySelector('.experience').scrollIntoView({ behavior: 'smooth' });
}

btnSkills.addEventListener('click', showExperienceSection);
if (btnExperience) {
  btnExperience.addEventListener('click', showExperienceSection);
}