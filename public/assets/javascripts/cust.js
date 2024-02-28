export const makeNavLinksSmooth = () => {
  const navLinks = document.querySelectorAll('.nav-link');

  for (let n in navLinks) {
    if (navLinks.hasOwnProperty(n)) {
      navLinks[n].addEventListener('click', e => {
        e.preventDefault();
        document.querySelector(navLinks[n].hash)
          .scrollIntoView({
            behavior: "smooth"
          });
      });
    }
  }
}

export const spyScrolling = (offset = 0) => {
  const sections = document.querySelectorAll('.content-details');

  window.onscroll = () => {
    const scrollPos = document.documentElement.scrollTop - offset || document.body.scrollTop - offset;

    for (let s in sections)
      if (sections.hasOwnProperty(s) && sections[s].offsetTop <= scrollPos) {
        const id = sections[s].id;
        document.querySelector('.active').classList.remove('active');
        document.querySelector(`a[href*=${ id }]`).parentNode.classList.add('active');
      }
  }
}
