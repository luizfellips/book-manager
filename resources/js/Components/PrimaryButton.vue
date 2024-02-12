<template>
    <button class="PrimaryButton">
        <slot />
    </button>
</template>

<style scoped>
.PrimaryButton {
    display: inline-flex;
    align-items: center;
    padding: 4px 8px;
    background-color: #2d3748;
    border: 1px solid transparent;
    border-radius: 10px;
    font-weight: 600;
    font-size: 1.75rem;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    transition: background-color 0.15s ease-in-out, color 0.15s ease-in-out;
    cursor: pointer;
}

.PrimaryButton:hover {
    background-color: #4a5568;
}

.PrimaryButton:focus,
.PrimaryButton:focus-within {
    outline: none;
    box-shadow: 0 0 0 2px rgba(66, 153, 225, 0.5);
}

.PrimaryButton:active {
    background-color: #1a202c;
}</style>
