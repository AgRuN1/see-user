function errors(number){
	switch (number){
		case 0: 
		return "No tokens";
		case 1:
		return "Unknown error";
		case 2:
		return "Application off";
		case 3:
		return "Unknown method";
		case 4:
		return "Unknown signature";
		case 5:
		return "Authorization fails";
		case 6:
		return "Too many requests";
		case 7:
		return "No allowed";
		case 8:
		return "Unknown request";
		case 9:
		return "Too many standard action";
		case 10:
		return "Internal server error";
		case 11:
		return "Aplication must to be off";
		case 14:
		return "CAPTCHA input required";
		case 15:
		return "Access is denied";
		case 16:
		return "Require HTTPS";
		case 17:
		return "Require to valid user";
		case 18: 
		return "Page deleted or banned";
		case 111:
		return "Unknown user's id";
	}
}