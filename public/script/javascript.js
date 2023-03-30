const circles = document.querySelectorAll('.circle');

circles.forEach(circle => {
    circle.addEventListener('click', () => {
        circles.forEach(otherCircle => {
            if (otherCircle !== circle) {
                const tempTransform = otherCircle.style.transform;
                otherCircle.style.transform = circle.style.transform;
                circle.style.transform = tempTransform;
            }
        });
    });
});
