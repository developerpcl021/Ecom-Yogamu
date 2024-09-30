tailwind.config = {
  theme: {
    screens: {
      xsm: "420px",
      sm: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      "2xl": "1536px",
    },

    extend: {
      animation: {
        "spin-slow": "spin 10s linear infinite",
      },
      fontSize: {
        sm: "16px",
        lg: "24px",
        xl: "32px",
        "4xl": "48px",
      },
      colors: {
        primary: "#00CCBB",
        secondary: "#FFFbE3",
        black: "#1C1412",
      },
    },
  },
};
