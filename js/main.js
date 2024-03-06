customSelect('.form__select');

const picker = new easepick.create({
    element: "#date",
    css: [
        "https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.css"
    ],
    zIndex: 10,
    grid: 2,
    calendars: 2,
    plugins: [
        "LockPlugin",
        "TimePlugin"
    ]
})