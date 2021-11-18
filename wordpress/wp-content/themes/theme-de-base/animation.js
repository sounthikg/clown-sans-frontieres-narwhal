gsap.timeline({
    defaults: {
        repeat: -1,
        delay: 1
    }
})
    .fromTo('.larme01',
        { scale: 0.5, opacity: 0.5 },
        { scale: 1, opacity: 1, duration: 2, y: '400%' }, { scale: 0.5, opacity: 0, duration: 2, ease: 'sine', })

    .fromTo('.larme02',
        { scale: 0.5, opacity: 0.5 },
        { scale: 1, opacity: 1, duration: 2, y: '400%' }, { scale: 0.5, opacity: 0, duration: 2, ease: 'sine', })

gsap.fromTo(
    '.ballon-404',
    { rotate: "2deg" },
    {
        rotate: "-2deg", duration: 2.5, ease: "slow", repeat: -1, yoyo: true,
});