const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            width: {
                '72': '18rem'
            }
        },
    },
    variants: {},
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/custom-forms'),
        require('@tailwindcss/ui'),
    ],
};
