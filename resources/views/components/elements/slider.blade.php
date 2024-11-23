<div class="flex gap-1 items-center">
    <input type="range" name="" id="range" min="0" max="10" step="0.1" id="range"
        class="slider">
    <span class="text-white"></span>
</div>
<script>
    const range = document.getElementById('range');
    range.addEventListener('input', (e) => {
        const value = e.target.value;
        const label = e.target.nextElementSibling;
        label.innerHTML = value;
    });
    window.addEventListener('DOMContentLoaded', () => {
        const label = document.querySelector('span');
        label.innerHTML = range.value;
    });

    const inputRange = document.getElementById("range");
    const activeColor = "#419EB9";
    const inactiveColor = "#2F323E";

    range.addEventListener("input", function() {
        const ratio = (this.value - this.min) / (this.max - this.min) * 100;
        this.style.background = `linear-gradient(90deg, ${activeColor} ${ratio}%, ${inactiveColor} ${ratio}%)`;
    });
</script>
