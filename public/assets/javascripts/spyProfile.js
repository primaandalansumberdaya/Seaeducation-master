function makeNavLinksSmooth() {
    const navLinks = document.querySelectorAll('.nav-links');

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

function spyScrolling(offset = 0) {
    const sections = document.querySelectorAll('.content-profile');

    window.onscroll = () => {
        const scrollPos = document.documentElement.scrollTop - offset || document.body.scrollTop - offset;

        for (let s in sections)
            if (sections.hasOwnProperty(s) && sections[s].offsetTop <= scrollPos) {
                const id = sections[s].id;
                document.querySelector('.active').classList.remove('active');
                document.querySelector(`a[href*=${id}]`).parentNode.classList.add('active');
            }
    }
}

spyScrolling(50);
