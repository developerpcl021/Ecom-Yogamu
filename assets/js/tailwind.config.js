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
        xs: "0.75rem", // 12px
        sm: "0.875rem", // 14px
        base: "1rem", // 16px
        lg: "1.125rem", // 18px
        xl: "1.25rem", // 20px
        "2xl": "1.5rem", // 24px
        "3xl": "1.875rem", // 30px
        "4xl": "2.25rem", // 36px
        "5xl": "3rem", // 48px
      },
      colors: {
        primary: "#f16159",
        secondary: "#d3e3e2",
        lightsecondary: "#dce8e8",
      },
    },
    container: {
      center: true,
      padding: "1rem",
    },
  },
};
