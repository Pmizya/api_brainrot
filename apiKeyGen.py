import string,secrets

apiKey = ""

for _ in range(32):
    apiKey+=secrets.choice(string.ascii_lowercase+string.ascii_uppercase+string.digits)

print(apiKey)
