const dropdownBtn = document.getElementById('dropdownBtn');
const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownBtn.addEventListener('click', () => {
      dropdownMenu.classList.toggle('hidden');
      dropdownBtn.classList.toggle('text-green-500');
    });

    // Optional: tutup dropdown jika klik di luar
    document.addEventListener('click', (e) => {
      if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.add('hidden');
      }
    });