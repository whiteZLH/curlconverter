httpService = new http();
httpService.setUrl("https://localhost:28139/");
httpService.setMethod("GET");
httpService.setUsername("some_username");
httpService.setPassword("some_password");

result = httpService.send().getPrefix();
writeDump(result);
