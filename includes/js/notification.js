var NotificationIsSupported = !!(window.Notification || win.webkitNotifications || navigator.mozNotification); 

var PERMISSION_DEFAULT = "default", 
	PERMISSION_GRANTED = "granted", 
	PERMISSION_DENIED = "denied", 
	PERMISSION = [PERMISSION_GRANTED, PERMISSION_DEFAULT, PERMISSION_DENIED]; 

function checkPermission() { 
	var permission; 
	if (window.webkitNotifications && window.webkitNotifications.checkPermission) {
		permission = PERMISSION[window.webkitNotifications.checkPermission()]; 
	} else if (navigator.mozNotification) { 
		permission = PERMISSION_GRANTED; 
	} else if (window.Notification && window.Notification.permission) {
		permission = window.Notification.permission; } return permission; 
	}
};
// window.Notification /* W3C Specification */ 
// win.webkitNotifications /* old WebKit Browsers */
// navigator.mozNotification /* Firefox for Android and Firefox OS */
if (NotificationIsSupported) {
	if (window.webkitNotifications && window.webkitNotifications.checkPermission) { 
		window.webkitNotifications.requestPermission(); 
	} else if (window.Notification && window.Notification.requestPermission) { 
		window.Notification.requestPermission(); 
	} 
}

function notify (title, description) { 
	var notification; 
	if (checkPermission() === PERMISSION_GRANTED) { 
		if (window.Notification) { 
			notification = new window.Notification(title, description);
		} else if (window.webkitNotifications) { 
			notification = window.webkitNotifications.createNotification(title, description); 
			notification.show(); 
		} else if (navigator.mozNotification) { 
			notification = navigator.mozNotification.createNotification(title , description); 
			notification.show(); 
		} 
	} 
} 
var showNotificationButton = document.getElementById('shownotificationbutton'); 
showNotificationButton.addEventListener('click', function () { 
	showNotification("Title", ,{ 
		body: "Body",
		icon: "icon.ico", 
		tag: "tag",
        dir: "ltr",
        lang: "en-US"
	}
);