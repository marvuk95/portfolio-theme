const tween = KUTE.fromTo(
    '#blob1',
    { path: '#blob1' },
    { path: '#blob2' },
    { repeat: 999, duration: 3000, yoyo: true }
).start();

const tweens = KUTE.fromTo(
    '#wave1',
    { path: '#wave1' },
    { path: '#wave2' },
    { repeat: 999, duration: 3000, yoyo: true }
).start();