module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/css/**/*.css"
    ],
    safelist: [
        // Background colors
        ...["sky","blue","red","green","yellow","amber","emerald","rose","gray","neutral","indigo","purple","pink","lime","teal","cyan","orange","violet","fuchsia","stone","zinc"].flatMap(color =>
            [50,100,200,300,400,500,600,700,800,900,950].map(shade => `bg-${color}-${shade}`)
        ),
        // Text colors
        ...["sky","blue","red","green","yellow","amber","emerald","rose","gray","neutral","indigo","purple","pink","lime","teal","cyan","orange","violet","fuchsia","stone","zinc"].flatMap(color =>
            [50,100,200,300,400,500,600,700,800,900,950].map(shade => `text-${color}-${shade}`)
        ),
        // Border colors
        ...["sky","blue","red","green","yellow","amber","emerald","rose","gray","neutral","indigo","purple","pink","lime","teal","cyan","orange","violet","fuchsia","stone","zinc"].flatMap(color =>
            [50,100,200,300,400,500,600,700,800,900,950].map(shade => `border-${color}-${shade}`)
        ),
        // Ring colors
        ...["sky","blue","red","green","yellow","amber","emerald","rose","gray","neutral","indigo","purple","pink","lime","teal","cyan","orange","violet","fuchsia","stone","zinc"].flatMap(color =>
            [50,100,200,300,400,500,600,700,800,900,950].map(shade => `ring-${color}-${shade}`)
        ),
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
