<div
    class="mt-10 grid w-full select-none grid-flow-col grid-rows-4 gap-2 overflow-hidden text-center font-musnad text-lg text-primary-400/40 [mask-image:linear-gradient(to_bottom,transparent,black_100%)] sm:gap-4 sm:text-sm md:mt-28 md:gap-10 md:text-4xl">
</div>

<script>
    const musnadLetters = [
        '𐩠', '𐩡', '𐩢', '𐩣', '𐩤', '𐩥', '𐩦', '𐩧', '𐩨', '𐩩',
        '𐩪', '𐩫', '𐩬', '𐩭', '𐩮', '𐩯', '𐩰', '𐩱', '𐩲', '𐩳',
        '𐩴', '𐩵', '𐩶', '𐩷', '𐩸', '𐩹', '𐩺', '𐩻', '𐩼', '𐩽'
    ];

    const container = document.querySelector('.font-musnad');
    const updateLetters = () => {
        container.innerHTML = '';
        const count = window.innerWidth < 640 ? 50 : window.innerWidth < 768 ? 75 : 100;
        for (let i = 0; i < count; i++) {
            const letterDiv = document.createElement('div');
            letterDiv.textContent = musnadLetters[i % musnadLetters.length];
            container.appendChild(letterDiv);
        }
    };

    updateLetters();
    window.addEventListener('resize', updateLetters);
</script>
