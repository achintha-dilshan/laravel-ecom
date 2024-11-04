class Countdown {
    constructor(selector) {
        this.elements = document.querySelectorAll(selector);

        this.countdowns = Array.from(this.elements).map((element) => {
            const targetDate = element.dataset.countdown;

            if (!targetDate) return;

            return {
                element,
                targetTime: new Date(targetDate).getTime(),
                targetEls: {
                    days: element.querySelector("[data-days]"),
                    hours: element.querySelector("[data-hours]"),
                    minutes: element.querySelector("[data-minutes]"),
                    seconds: element.querySelector("[data-seconds]"),
                },
            };
        });

        this.start();
    }

    start() {
        this.update();
        this.intervalId = requestAnimationFrame(() => this.update());
    }

    update() {
        const now = new Date().getTime();

        this.countdowns.forEach((countdown) => {
            const timeDiff = countdown.targetTime - now;

            if (timeDiff <= 0) {
                // do something
                return;
            }

            // calculate time components
            let days = Math.floor(timeDiff / (1000 * 60 * 60 * 24)),
                hours = Math.floor(
                    (timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                ),
                minutes = Math.floor(
                    (timeDiff % (1000 * 60 * 60)) / (1000 * 60)
                ),
                seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

            // format numbers to have leading zeros if necessary
            days = String(days).padStart(2, "0");
            hours = String(hours).padStart(2, "0");
            minutes = String(minutes).padStart(2, "0");
            seconds = String(seconds).padStart(2, "0");

            // update the data attributes with the new time values
            if (countdown.targetEls.days)
                countdown.targetEls.days.textContent = days;
            if (countdown.targetEls.hours)
                countdown.targetEls.hours.textContent = hours;
            if (countdown.targetEls.minutes)
                countdown.targetEls.minutes.textContent = minutes;
            if (countdown.targetEls.seconds)
                countdown.targetEls.seconds.textContent = seconds;
        });

        this.intervalId = requestAnimationFrame(() => this.update());
    }

    stop() {}
}

document.addEventListener("DOMContentLoaded", function () {
    new Countdown(".countdown");
});
