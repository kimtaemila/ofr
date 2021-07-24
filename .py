import re

with open('nums.txt', 'r') as f:
  lines = f.read().split('\n')
  json = '['
  for line in lines:
    key = re.findall(r'<option data-countryCode="(.+?)"', line)[0]
    value = re.findall(r'value="(.+?)"', line)[0]
    country = re.findall(r'">(.+?)</option>', line)[0]
    json += f'''
  {{
    "key": "{key}",
    "value": "{value}",
    "country": "{country}"
  }},'''
  json += '\n]'
  with open('number.json', 'w') as fw:
    fw.write(json)
