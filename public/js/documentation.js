// Script para alternar entre seções de conteúdo
document.querySelectorAll('nav ul li a').forEach(link => {
    link.addEventListener('click', function() {
        const section = document.querySelector(`#${this.getAttribute('data-section')}`);
        
        document.querySelectorAll('.content section').forEach(sec => {
            sec.classList.remove('active');
        });

        section.classList.add('active');
    });
});

// Script para alternar entre modos claro e escuro
const modeToggle = document.getElementById('modeToggle');
modeToggle.addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
    const icon = modeToggle.querySelector('i');
    if (document.body.classList.contains('dark-mode')) {
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
    } else {
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
    }
});
