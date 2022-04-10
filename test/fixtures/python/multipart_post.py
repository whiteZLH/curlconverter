import requests

headers = {
    'Authorization': 'Bearer ACCESS_TOKEN',
}

files = {
    'attributes': (None, '{"name":"tigers.jpeg", "parent":{"id":"11446498"}}'),
    'file': ('myfile.jpg', open('myfile.jpg', 'rb')),
}

response = requests.post('https://localhost:28139/api/2.0/files/content', headers=headers, files=files)
