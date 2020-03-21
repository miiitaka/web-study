import time

import RPi.GPIO as GPIO

INTERVAL = 1
SLEEPTIME = 5
GPIO_PIN = 18

def detected():
	print("ん？誰か通った？")
	time.sleep(SLEEPTIME)

def start_pir():
	while True:
		if GPIO.input(GPIO_PIN) == GPIO.HIGH:
			detected()
		
		time.sleep(INTERVAL)

def main():
	GPIO.setmode(GPIO.BCM) # GPIOの番号で指定モード。GPIO.BOARDだとピン番号
	GPIO.setup(GPIO_PIN, GPIO.IN) # GPIO_PINを入力として利用
	
	try:
		print("End: Ctrl+C")
		# 人感センサー処理を実行
		start_pir()
	except KeyboardInterrupt:
		print("処理中...")
	finally:
		GPIO.cleanup(GPIO_PIN)
		print(f"GPIO({GPIO_PIN}) clean完了")

if __name__ == "__main__":
	main()
