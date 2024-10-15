/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/admin/views/**/*.blade.php", "./resources/views/**/*.blade.php", "./resources/js/**/*.{jsx,tsx}"],
    theme: {
        extend: {
            colors: {
                background: "rgb(var(--color-background) / <alpha-value>)",
                primary: "rgb(var(--color-primary) / <alpha-value>)",
                "content-1": "rgb(var(--color-content-1) / <alpha-value>)",
                "content-2": "rgb(var(--color-content-2) / <alpha-value>)",
                "content-3": "rgb(var(--color-content-3) / <alpha-value>)",
                "content-4": "rgb(var(--color-content-4) / <alpha-value>)",
                "content-5": "rgb(var(--color-content-5) / <alpha-value>)",
                "content-6": "rgb(var(--color-content-6) / <alpha-value>)",
                border: "rgb(var(--color-border) / <alpha-value>)",
                success: "rgb(var(--color-success) / <alpha-value>)",
                danger: "rgb(var(--color-danger) / <alpha-value>)",
                info: "rgb(var(--color-info) / <alpha-value>)",
                "text-secondary": "rgb(var(--color-text-secondary) / <alpha-value>)",
                "text-primary": "rgb(var(--color-text-primary) / <alpha-value>)",
            },
            borderRadius: {
                "4xl": "2.5rem",
            },
        },
    },
    plugins: [
        require("tailwind-animatecss"),
        function ({ addVariant }) {
            addVariant("child", "& > *");
            addVariant("child-hover", "& > *:hover");
        },
    ],
};
